(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-section-block', {
        title: 'Section Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            return el(
                'section', { className: 'section ' + props.className },
                el('div', { className: 'section__inner container' },
                    el(InnerBlocks))
            );
        },
        save: function (props) {
            return el(
                'section', { className: 'section ' + props.className },
                el('div', { className: 'section__inner container' },
                    el(InnerBlocks.Content))
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);