tinymce.PluginManager.add('maera_grid', function(editor, url) {
    editor.addButton('maera_grid', {
        type: 'menubutton',
        tooltip: 'Grid',
        icon: 'maera-grid',
        menu: [
            { text: '12 Columns', onclick: function() { editor.insertContent('[maera_grid_row_open]<div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div><div class="[maera_grid_col_1]">Text</div>[maera_grid_row_close]'); } },
            { text: '6 Columns',  onclick: function() { editor.insertContent('[maera_grid_row_open]<div class="[maera_grid_col_2]">Text</div><div class="[maera_grid_col_2]">Text</div><div class="[maera_grid_col_2]">Text</div><div class="[maera_grid_col_2]">Text</div><div class="[maera_grid_col_2]">Text</div><div class="[maera_grid_col_2]">Text</div>[maera_grid_row_close]'); } },
            { text: '4 Columns',  onclick: function() { editor.insertContent('[maera_grid_row_open]<div class="[maera_grid_col_3]">Text</div><div class="[maera_grid_col_3]">Text</div><div class="[maera_grid_col_3]">Text</div><div class="[maera_grid_col_3]">Text</div>[maera_grid_row_close]'); } },
            { text: '3 Columns',  onclick: function() { editor.insertContent('[maera_grid_row_open]<div class="[maera_grid_col_4]">Text</div><div class="[maera_grid_col_4]">Text</div><div class="[maera_grid_col_4]">Text</div>[maera_grid_row_close]'); } },
            { text: '2 Columns',  onclick: function() { editor.insertContent('[maera_grid_row_open]<div class="[maera_grid_col_6]">Text</div><div class="[maera_grid_col_6]">Text</div>[maera_grid_row_close]'); } },
            { text: '1 Columns',  onclick: function() { editor.insertContent('[maera_grid_row_open]<div class="[maera_grid_col_12]">Text</div>[maera_grid_row_close]'); } },
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
