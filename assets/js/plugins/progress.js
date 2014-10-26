tinymce.PluginManager.add('maera_progress', function(editor, url) {
    editor.addButton('maera_progress', {
        tooltip: 'Progress Bar',
        icon: 'maera-progress',
        onclick: function() {
            tinymce.activeEditor.windowManager.open({
                title: 'Progress Bar',
                url: url + '/progress.html',
                width: 480,
                height: 320
            });
        }
    });
});