class AIGutenbergApp {

    constructor($) {
      this.$ = $;
      this.cache = {};
    }

    cacheElements() {
      this.cache.$gutenberg = this.$( '#editor' );
      this.cache.$buttonCont = this.$( jQuery( '#gutenberg-twai-button' ).html() );
      this.cache.$button = this.cache.$buttonCont.find( '#twai-button' );
      this.cache.$action = this.cache.$buttonCont.find( '.twai-list-item' );
      this.cache.enabled = false;
      this.cache.globalBlockId = "";

      this.cache.$tooltipCont = this.$( jQuery( '#twai-tooltip-onboarding-template' ).html() );

      this.cache.$tooltip = this.cache.$tooltipCont.length ? true : false;

      this.bindEvents();
      let self = this;
      wp.data.subscribe( function() {
        setTimeout( function() {
          self.buildPanel();
        }, 1 );
      } );
    }

    buildPanel() {
      if ( !jQuery("body").hasClass("elementor-editor-active")  ) {
        if (!this.cache.$gutenberg.find('#twai-button-cont').length) {
          this.cache.$gutenberg.find('.edit-post-header-toolbar').append(this.cache.$buttonCont);

          if ( jQuery(".wp-block-post-title").text().trim() != "" ) {
            // Disable tooltip for the posts with title.
            this.cache.$tooltip = false;
          }
          if (this.cache.$tooltip) {
            // Add tooltip for the first step.
            this.buildTooltip(1, jQuery(".wp-block-post-title"));
          }
        }
      }
    }

    buildTooltip(step, cont) {
      // Change the tooltip content depends on step and show it.
      this.addTooltip(step, cont);

      // Bind events to the tooltip action button.
      this.bindTooltipEvents(step, cont);
    }

    bindTooltipEvents(step, cont) {
      let self = this;
      jQuery(".twai-tooltip-button button").on("click", function() {
        if ( jQuery(this).hasClass("twai-button-disabled")) {
          // Do nothing when the button is disabled (e.g. on the first step with not selected title).
          return;
        }
        // Clean all styles from actions list items.
        jQuery(".twai-list-item").removeClass("twai-action-active twai-action-inactive");
        switch (step) {
          case 1: {
            // Select the title.
            self.selectText(jQuery(".wp-block-post-title"));
          }
          case 1:
          case 2: {
            // Automatically show actions list.
            jQuery("#twai-button").removeClass("twai-button-disabled").addClass("twai-button-enabled twai-button-freeze");
            // Deactivate all actions.
            jQuery(".twai-list-item").addClass("twai-action-inactive");
            // Activate the specific action.
            jQuery(".twai-list-item-content div:nth-child(" + (step + 1) +")").removeClass("twai-action-inactive").addClass("twai-action-active");
            break;
          }
          case 3: {
            // Disable tooltip after passing onboarding.
            self.cache.$tooltip = false;
            self.how_to_use_intro_finished();
            // Just need to remove the tooltip.
            break;
          }
        }
        // Remove tooltip container.
        jQuery(".twai-tooltip").remove();
      });
    }

    how_to_use_intro_finished() {
      jQuery.ajax({
        url: ajaxurl,
        type: "POST",
        dataType: 'text',
        data: {
          action: "how_to_use_intro_finished",
          ajax_nonce: taa_admin_vars.ajaxnonce
        },
        success: function () {}
      });

    }

    addTooltip(step, cont) {
      // Add the tooltip after the container.
      cont.after(this.cache.$tooltipCont);
      switch (step) {
        case 1: {
          // Highlight the element.
          cont.addClass("twai-tooltip-bg");
          jQuery(".wp-block-post-title").on("click keyup", function() {
            jQuery(this).addClass("twai-tooltip-bg");
          });
          // Disable/enable tooltip action button.
          jQuery(".wp-block-post-title").on("keyup", function() {
            if ( jQuery(this).text().trim() != "" ) {
              jQuery(".twai-tooltip-button button").removeClass("twai-button-disabled");
            }
            else {
              jQuery(".twai-tooltip-button button").addClass("twai-button-disabled");
            }
          });
          jQuery(".twai-tooltip-title").html("Let’s start by creating an outline for your next blog");
          jQuery(".twai-tooltip-desc").html("Write a title and click next and see how our AI will generate the outline based on the title.");
          jQuery(".twai-tooltip-button button").html("Next");
          break;
        }
        case 2: {
          // Highlight the element.
          cont.addClass("twai-tooltip-bg");
          jQuery(".twai-tooltip-title").html("Perfect, now let’s create the intro paragraph");
          jQuery(".twai-tooltip-desc").html("You can use AI assistant to generate the intro paragraph based on the existing outline.");
          jQuery(".twai-tooltip-button button").html("Generate");
          // Change the tooltip position.
          this.cache.$tooltipCont.css("top", ((parseInt(cont.position().top) + parseInt(cont.css("marginTop")) + parseInt(cont.height()) / 2) - 30) + "px");
          break;
        }
        case 3: {
          jQuery(".twai-tooltip-title").html("The journey has just started!");
          jQuery(".twai-tooltip-desc").html("You have learned the basics of AI Assistant in Gutenberg, but that is not all, let’s see what else can AI Assistant do.");
          jQuery(".twai-tooltip-button button").html("Explore");
          // Change the tooltip position.
          this.cache.$tooltipCont.css("top", ((parseInt(cont.position().top) + parseInt(cont.css("marginTop")) + parseInt(cont.height()) / 2) - 30) + "px");
          break;
        }
      }
      jQuery(".twai-tooltip").removeClass("twai-hidden").data("step", step);
    }

    bindEvents() {
      let self = this;
      this.cache.$action.on('click', function () {
        if ( jQuery(this).hasClass("twai-action-inactive") ) {
          return;
        }

        taa_button_loading(true, jQuery(this).closest(".twai-button"));
        jQuery(".twai-button-enabled").removeClass("twai-button-enabled twai-button-freeze");

        let slug = jQuery(this).data("value");
        let data = self.get_selection_data();
        let ob = new RestRequest("core/" + slug, {"prompt": data.selectionText}, "POST", function ( success ) {
          let output = success['data']['output'];
          if (slug == "outline") {
            self.add_outline_block(data.index, output);
          } else {
            self.add_paragraph_block(data.index, output);
          }
        }, function(err) {
          taa_button_loading(false);
        }, function(err) {
          taa_button_loading(false);
        });

        ob.taa_send_rest_request();
      });

      this.cache.$button.on( 'mouseenter', function() {
        self.cache.enabled = self.get_selection_data() ? true : false;
        self.cache.$button.removeClass("twai-button-enabled twai-button-disabled twai-button-freeze");
        if (self.cache.enabled) {
          if ( jQuery(".twai-tooltip-onboarding").length && !jQuery(".twai-tooltip-onboarding").hasClass("twai-hidden") ) {
            // Clean all styles from actions list items.
            jQuery(".twai-list-item").addClass("twai-action-inactive").removeClass("twai-action-active");
            // Activate the specific action.
            jQuery(".twai-list-item-content div:nth-child(" + (jQuery(".twai-tooltip-onboarding").data("step") + 1) +")").removeClass("twai-action-inactive").addClass("twai-action-active");
          }
          self.cache.$button.addClass("twai-button-enabled");
        }
        else {
          self.cache.$button.addClass("twai-button-disabled");
        }
      } );
    }

    init() {
      this.cacheElements();
    }

    // Run flick effect on the given text.
    wordFlick (word, index, blockId, multiple, wordArray, i) {
      let self = this,
        offset = 0,
        speed = 10, // setInterval can take less than 10
        step = (word.length > 200 ? 15 : 3);

      let interval = setInterval(function () {
        if (offset >= word.length) {
          // Stop the effect on the end of the text.
          clearInterval(interval);
          if ( multiple == true ) {
            self.add_heading_block(++index, wordArray, ++i);
          }

          taa_button_loading(false);
          // Show word usage tooltip.
          taa_show_word_usage();

          // Show tooltip.
          if (self.cache.$tooltip) {
            // Add tooltip for the third step.
            if ( multiple == false ) {
              self.buildTooltip(3, jQuery(blockId));
            }
            else {
              if (1 == i) {
                // Store the first outline id to scroll to that element after all outlines generation.
                self.cache.globalBlockId = blockId;
              }
              // Add tooltip only for the first outline.
              if (wordArray.length == i) {
                // Add tooltip for the second step.
                self.selectText(jQuery(self.cache.globalBlockId));
                self.scroll_to_element(document.querySelector(self.cache.globalBlockId));
                self.buildTooltip(2, jQuery(self.cache.globalBlockId));
              }
            }
          }
        }
        else {
          offset += step;
          let part = word.substr(0, offset);
          // Insert the text in the block with effect.
          jQuery(blockId).removeClass("hidden").text(part);
          self.selectText(jQuery(blockId));
        }
      }, speed);
    }

    // Select the text of the given container.
    selectText(that) {
      var doc = document;
      var element = that[0];
      if (doc.body.createTextRange) {
        var range = document.body.createTextRange();
        range.moveToElementText(element);
        range.select();
      }
      else if (document.getSelection) {
        var selection = document.getSelection();
        var range = document.createRange();
        range.selectNodeContents(element);
        selection.removeAllRanges();
        selection.addRange(range);
      }
    }

  scroll_to_element(element) {
    try {
      element.scrollIntoView({behavior: "smooth", block: 'center'});
    } catch (e) {

    }
  }

    // Get selected text data ( block_id, text, index of block).
    get_selection_data() {
      let selectionData = document.getSelection();
      let selectionText = jQuery.trim(selectionData.toString());
      let blockID;
      if ( selectionText !== "" ) {
        let parentElementId = jQuery(window.getSelection().focusNode).closest("[id^='block-']");

        if ( parentElementId.length > 0 ) {
          let selectionID = parentElementId.attr("id").split("block-")[1];
          blockID = selectionID;
          let allBlocks = wp.data.select('core/block-editor').getBlocks();
          let index = allBlocks.map(function (block) {
            return block.clientId == selectionID;
          }).indexOf(true) + 1;

          if ( index == 0 ) {
            allBlocks.forEach(function (blockType, key) {
              let innerBlock = blockType.innerBlocks
              innerBlock.forEach(function (innerBlockType) {
                if (selectionID == innerBlockType.clientId) {
                  index = key + 1;
                  blockID = blockType.clientId;
                }
              });
            });
          }
          return {
            blockID: blockID,
            selectionText: selectionText,
            index: index
          };
        } else {
          return {
            blockID: 0,
            selectionText: selectionText,
            index: 0
          };
        }
      }
      return "";
    }

    // Add new paragraph block in given position.
    add_paragraph_block( index, content ) {
      // Put the generated content in temp container to make insert it with flick.
      const newBlock = wp.blocks.createBlock("core/paragraph", {
        content: content,
      });
      wp.data.dispatch("core/block-editor").insertBlocks(newBlock, index);
      jQuery("#block-" + newBlock.clientId).addClass("hidden");
      // Run the flick effect on the generated text.
      this.wordFlick(content, index, "#block-" + newBlock.clientId, false);
    }

    // Add new outline in given position.
    add_outline_block( index, content ) {
      let contentArray = content.split('\n');
      if ( contentArray.length == 1 ) {
        contentArray = content.split('•');
      }
      if ( contentArray.length == 1 ) {
        contentArray = content.split(' - ');
      }

      this.add_heading_block(index, contentArray, 0);
    }

    // Add a heading block and run an animation.
    add_heading_block (index, contentArray, i) {
      if ( typeof contentArray[i] !== "undefined" ) {
        let value = contentArray[i];
        if (value.charAt(0) === '•' || value.charAt(0) === '-') {
          value = value.substring(1);
        }
        value = value.trim();
        if (value != "") {
          const newBlock = wp.blocks.createBlock("core/heading", {
            level: 2,
            fontSize: 'x-large',
            content: value,
          });
          wp.data.dispatch("core/block-editor").insertBlocks(newBlock, index);

          jQuery("#block-" + newBlock.clientId).addClass("hidden");

          // Run the flick effect on the generated text.
          this.wordFlick(value, index, "#block-" + newBlock.clientId, true, contentArray, i);
        }
      }
    }
}

jQuery(function($) {
  let ob = new AIGutenbergApp($);
  ob.init();
});
