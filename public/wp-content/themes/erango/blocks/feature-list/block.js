(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-feature-list', {
        title: 'Feature List',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            return el('div', { className: 'feature-list' },
                el( InnerBlocks, { allowedBlocks: ['erango/erango-feature-list-item'] } )
            );
        },
        save: function (props) {
            return el('div', { className: 'feature-list' },
                    el(InnerBlocks.Content)
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);