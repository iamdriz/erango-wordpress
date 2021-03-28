(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-sub-header-block', {
        title: 'Sub Header Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            return el(
                'sub-header', { className: 'sub-header ' + props.className },
                el(InnerBlocks)
            );
        },
        save: function (props) {
            return el(
                'sub-header', { className: 'sub-header ' + props.className },
                el(InnerBlocks.Content)
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);