(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-section-panel-block', {
        title: 'Section Panel Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            return el(
                'section', { className: 'section section--panel ' + props.className },
                el('div', { className: 'section__inner container' },
                    el(InnerBlocks))
            );
        },
        save: function (props) {
            return el(
                'section', { className: 'section section--panel ' + props.className },
                el('div', { className: 'section__inner container' },
                    el(InnerBlocks.Content))
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);