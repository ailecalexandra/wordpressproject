jQuery( window ).on( 'elementor/frontend/init', function() {
    class Checkout extends TWBB_WooCommerce_Base {
        getDefaultSettings() {
            const defaultSettings = super.getDefaultSettings(...arguments);
            return {
                selectors: {
                    ...defaultSettings.selectors,
                    container: '.elementor-widget-twbb_woocommerce-checkout-page',
                    loginForm: '.e-woocommerce-login-anchor',
                    loginSubmit: '.e-woocommerce-form-login-submit',
                    loginSection: '.e-woocommerce-login-section',
                    showCouponForm: '.e-show-coupon-form',
                    couponSection: '.e-coupon-anchor',
                    showLoginForm: '.e-show-login',
                    applyCoupon: '.e-apply-coupon',
                    checkoutForm: 'form.woocommerce-checkout',
                    couponBox: '.e-coupon-box',
                    address: 'address',
                    wpHttpRefererInputs: '[name="_wp_http_referer"]'
                },
                classes: defaultSettings.classes,
                ajaxUrl: elementorTenwebFrontend.config.ajaxurl
            };
        }
        getDefaultElements() {
            const selectors = this.getSettings('selectors');
            return {
                ...super.getDefaultElements(...arguments),
                $container: this.$element.find(selectors.container),
                $loginForm: this.$element.find(selectors.loginForm),
                $showCouponForm: this.$element.find(selectors.showCouponForm),
                $couponSection: this.$element.find(selectors.couponSection),
                $showLoginForm: this.$element.find(selectors.showLoginForm),
                $applyCoupon: this.$element.find(selectors.applyCoupon),
                $loginSubmit: this.$element.find(selectors.loginSubmit),
                $couponBox: this.$element.find(selectors.couponBox),
                $checkoutForm: this.$element.find(selectors.checkoutForm),
                $loginSection: this.$element.find(selectors.loginSection),
                $address: this.$element.find(selectors.address)
            };
        }
        bindEvents() {
            super.bindEvents(...arguments);
            this.elements.$showCouponForm.on('click', event => {
                event.preventDefault();
                this.elements.$couponSection.slideToggle();
            });
            this.elements.$showLoginForm.on('click', event => {
                event.preventDefault();
                this.elements.$loginForm.slideToggle();
            });
            this.elements.$applyCoupon.on('click', event => {
                event.preventDefault();
                this.applyCoupon();
            });
            this.elements.$loginSubmit.on('click', event => {
                event.preventDefault();
                this.loginUser();
            });
            elementorFrontend.elements.$body.on('updated_checkout', () => {
                this.applyPurchaseButtonHoverAnimation();
                this.updateWpReferers();
            });
        }
        onInit() {
            super.onInit(...arguments);
            this.toggleStickyRightColumn();
            this.updateWpReferers();
            this.equalizeElementHeight(this.elements.$address); // Equalize <address> boxes height

            if (elementorFrontend.isEditMode()) {
                this.elements.$loginForm.show();
                this.elements.$couponSection.show();
                this.applyPurchaseButtonHoverAnimation();
            }
        }
        onElementChange(propertyName) {
            if ('sticky_right_column' === propertyName) {
                this.toggleStickyRightColumn();
            }
        }
        onDestroy() {
            super.onDestroy(...arguments);
            this.deactivateStickyRightColumn();
        }
        applyPurchaseButtonHoverAnimation() {
            const purchaseButtonHoverAnimation = this.getElementSettings('purchase_button_hover_animation');
            if (purchaseButtonHoverAnimation) {
                // This element is recaptured every time because the checkout markup can refresh
                jQuery('#place_order').addClass('elementor-animation-' + purchaseButtonHoverAnimation);
            }
        }
        applyCoupon() {
            // Wc_checkout_params is required to continue, ensure the object exists
            // eslint-disable-next-line camelcase
            if (!wc_checkout_params) {
                return;
            }
            this.startProcessing(this.elements.$couponBox);
            const data = {
                // eslint-disable-next-line camelcase
                security: wc_checkout_params.apply_coupon_nonce,
                coupon_code: this.elements.$couponBox.find('input[name="coupon_code"]').val()
            };
            jQuery.ajax({
                type: 'POST',
                // eslint-disable-next-line camelcase
                url: wc_checkout_params.wc_ajax_url.toString().replace('%%endpoint%%', 'apply_coupon'),
                context: this,
                data,
                success(code) {
                    jQuery('.woocommerce-error, .woocommerce-message').remove();
                    this.elements.$couponBox.removeClass('processing').unblock();
                    if (code) {
                        this.elements.$checkoutForm.before(code);
                        this.elements.$couponSection.slideUp();
                        elementorFrontend.elements.$body.trigger('applied_coupon_in_checkout', [data.coupon_code]);
                        elementorFrontend.elements.$body.trigger('update_checkout', {
                            update_shipping_method: false
                        });
                    }
                },
                dataType: 'html'
            });
        }
        loginUser() {
            this.startProcessing(this.elements.$loginSection);
            const data = {
                action: 'elementor_woocommerce_checkout_login_user',
                username: this.elements.$loginSection.find('input[name="username"]').val(),
                password: this.elements.$loginSection.find('input[name="password"]').val(),
                nonce: this.elements.$loginSection.find('input[name="woocommerce-login-nonce"]').val(),
                remember: this.elements.$loginSection.find('input#rememberme').prop('checked')
            };
            jQuery.ajax({
                type: 'POST',
                url: this.getSettings('ajaxUrl'),
                context: this,
                data,
                success(code) {
                    code = JSON.parse(code);
                    this.elements.$loginSection.removeClass('processing').unblock();
                    const messages = jQuery('.woocommerce-error, .woocommerce-message');
                    messages.remove();
                    if (code.logged_in) {
                        location.reload();
                    } else {
                        this.elements.$checkoutForm.before(code.message);
                        elementorFrontend.elements.$body.trigger('checkout_error', [code.message]);
                    }
                }
            });
        }
        startProcessing($form) {
            if ($form.is('.processing')) {
                return;
            }

            /**
             * .block() is from a jQuery blockUI plugin loaded by WooCommerce. This code is based on WooCommerce
             * core in order for the Checkout widget to behave the same as WooCommerce Checkout pages.
             */
            $form.addClass('processing').block({
                message: null,
                overlayCSS: {
                    background: '#fff',
                    opacity: 0.6
                }
            });
        }
    }
    elementorFrontend.hooks.addAction( 'frontend/element_ready/twbb_woocommerce-checkout-page.default', function ( $scope ) {
        new Checkout( { $element: $scope } );
    });
})