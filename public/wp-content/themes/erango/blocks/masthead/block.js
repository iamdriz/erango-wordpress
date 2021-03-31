(function (blocks, editor, element) {
    var el = element.createElement;
    var RichText = editor.RichText;

    blocks.registerBlockType('erango/erango-masthead-block', {
        title: 'Masthead Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function (props) {
            var content = props.attributes.content;
            function onChangeContent( newContent ) {
                props.setAttributes( { content: newContent } );
            }
            
            return el(
                'section', { className: 'masthead' },
                el('div', { className: 'container' },
                el( RichText, {
                    tagName: 'h1',
                    className: 'masthead__title',
                    onChange: onChangeContent,
                    value: content,
                } ))
            );
        },
        save: function (props) {
            return el(
                'section', { className: 'masthead' },
                el('div', { className: 'container' },
                el( RichText.Content, {
                    tagName: 'h1',
                    className: 'masthead__title',
                    value: props.attributes.content,
                } ))
            );
        },
    });
})(window.wp.blocks, window.wp.editor, window.wp.element);