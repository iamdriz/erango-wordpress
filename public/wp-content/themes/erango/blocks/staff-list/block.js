(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-staff-list', {
        title: 'Staff List',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            return el('div', { className: 'staff-list' },
                el( InnerBlocks, { allowedBlocks: ['erango/erango-staff-list-item'] } )
            );
        },
        save: function (props) {
            return el('div', { className: 'staff-list' },
                    el(InnerBlocks.Content)
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);