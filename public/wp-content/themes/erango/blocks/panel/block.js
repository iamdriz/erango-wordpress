(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-panel-block', {
        title: 'Panel Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            return el(
                'div', { className: 'panel ' + props.className },
                el('div', { className: 'container' },
                    el(InnerBlocks))
            );
        },
        save: function (props) {
            return el(
                'div', { className: 'panel ' + props.className },
                el('div', { className: 'container' },
                    el(InnerBlocks.Content))
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);