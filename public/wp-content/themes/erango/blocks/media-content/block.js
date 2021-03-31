(function (blocks, editor, element) {
    var el = element.createElement;
    var RichText = editor.RichText;

    blocks.registerBlockType('erango/erango-media-content-block', {
        title: 'Media Content Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            var content = props.attributes.content;
            function onChangeContent( newContent ) {
                props.setAttributes( { content: newContent } );
            }
            
            return el(
                'div', { className: 'media-content ' + props.className },
                el('div', { className: 'media-content__content' },
                el( RichText, {
                    tagName: 'h1',
                    className: 'sub-header__title',
                    onChange: onChangeContent,
                    value: content,
                } ))
            );
        },
        save: function (props) {
            return el(
                'div', { className: 'media-content ' + props.className },
                el('div', { className: 'media-content__content' },
                el( RichText.Content, {
                    tagName: 'h1',
                    value: props.attributes.content,
                } ))
            );
        },
    });
})(window.wp.blocks, window.wp.editor, window.wp.element);