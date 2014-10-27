tinymce.PluginManager.add( 'maera_alerts', function( editor, url ) {
    editor.addButton( 'maera_alerts', {
        type: 'menubutton',
        tooltip: 'Alerts',
            icon: 'maera-alerts',
            menu: [
                 { text: 'Success Alert', onclick: function() { editor.insertContent('[maera_alert type="success" id="alert-id" class="alert-class"]<strong>Well done!</strong>You successfully read <a href="#" class="alert-link">this important alert message</a>.[/maera_alert]');} },
                 { text: 'Info Alert',    onclick: function() { editor.insertContent('[maera_alert type="info" id="alert-id" class="alert-class"]<strong>Heads up!</strong>This <a href="#" class="alert-link">alert needs your attention</a>, but it\'s not super important.[/maera_alert]');} },
                 { text: 'Warning Alert', onclick: function() { editor.insertContent('[maera_alert type="warning" id="alert-id" class="alert-class"]<strong>Warning!</strong>Best check yo self, you\'re <a href="#" class="alert-link">not looking too good</a>.[/maera_alert]');} },
                 { text: 'Error Alert',   onclick: function() { editor.insertContent('[maera_alert type="danger" id="alert-id" class="alert-class"]<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things</a> up and try submitting again.[/maera_alert]');} }
            ]
    });
});
