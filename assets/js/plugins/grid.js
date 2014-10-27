tinymce.PluginManager.add('maera_grid', function(editor, url) {
    editor.addButton('maera_grid', {
        type: 'menubutton',
        tooltip: 'Grid',
        icon: 'maera-grid',
        menu: [
            { text: '12 Columns', onclick: function() { editor.insertContent('[maera_row]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[maera_col sizes="1"]Text[/maera_col]<br class="nc"/>[/maera_row]'); } },
            { text: '6 Columns',  onclick: function() { editor.insertContent('[maera_row]<br class="nc"/>[maera_col sizes="2"]Text[/maera_col]<br class="nc"/>[maera_col sizes="2"]Text[/maera_col]<br class="nc"/>[maera_col sizes="2"]Text[/maera_col]<br class="nc"/>[maera_col sizes="2"]Text[/maera_col]<br class="nc"/>[maera_col sizes="2"]Text[/maera_col]<br class="nc"/>[maera_col sizes="2"]Text[/maera_col]<br class="nc"/>[/maera_row]'); } },
            { text: '4 Columns',  onclick: function() { editor.insertContent('[maera_row]<br class="nc"/>[maera_col sizes="3"]Text[/maera_col]<br class="nc"/>[maera_col sizes="3"]Text[/maera_col]<br class="nc"/>[maera_col sizes="3"]Text[/maera_col]<br class="nc"/>[maera_col sizes="3"]Text[/maera_col]<br class="nc"/>[/maera_row]'); } },
            { text: '3 Columns',  onclick: function() { editor.insertContent('[maera_row]<br class="nc"/>[maera_col sizes="4"]Text[/maera_col]<br class="nc"/>[maera_col sizes="4"]Text[/maera_col]<br class="nc"/>[maera_col sizes="4"]Text[/maera_col]<br class="nc"/>[/maera_row]'); } },
            { text: '2 Columns',  onclick: function() { editor.insertContent('[maera_row]<br class="nc"/>[maera_col sizes="6"]Text[/maera_col]<br class="nc"/>[maera_col sizes="6"]Text[/maera_col]<br class="nc"/>[/maera_row]'); } },
            { text: '1 Columns',  onclick: function() { editor.insertContent('[maera_row]<br class="nc"/>[maera_col sizes="12"]Text[/maera_col]<br class="nc"/>[/maera_row]'); } },
            // {
            //     text: 'Custom Grid',
            //     onclick: function() {
            //         tinymce.activeEditor.windowManager.open({
            //             title: 'Custom Grid',
            //             url: url + '/grid.html',
            //             width: 580,
            //             height: 420
            //         });
            //     }
            // }
        ]
    });
});
