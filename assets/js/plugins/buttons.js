tinymce.PluginManager.add('maera_buttons', function(editor, url) {
    editor.addButton('maera_buttons', {
        tooltip: 'Buttons',
        icon: 'maera-buttons',
        onclick: function() {
            tinymce.activeEditor.windowManager.open({
                title: 'Buttons',
                url: url + '/buttons.html',
                width: 480,
                height: 320
            });
        }
    });
});