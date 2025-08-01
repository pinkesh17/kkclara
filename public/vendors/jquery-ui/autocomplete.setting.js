$.widget("custom.autocompletePlus", $.ui.autocomplete, {
  _create: function () {
    this._super();

    // Remove default handlers for both mouse and pointer/touch
    this._off(this.menu.element, "mousedown menufocus menuselect");
    this._off(this.menu.element, "pointerdown");
    this._on(this.menu.element, {
	mousedown: function (event, ui) {},

      menufocus: function (event, ui) {},
      menuselect: function (event, ui) {
		const item = ui.item.data("ui-autocomplete-item");
		autocompleteLabelAction(item.value)    
      }
    });
  }
});
  

