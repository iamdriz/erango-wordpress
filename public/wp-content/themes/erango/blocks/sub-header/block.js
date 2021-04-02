(function (blocks, editor, element) {
    var el = element.createElement;
    var RichText = editor.RichText;

    blocks.registerBlockType('erango/erango-sub-header-block', {
        title: 'Sub Header Block',
        icon: 'universal-access-alt',
        category: 'layout',
        attributes: {
			content: {
				type: 'array',
				source: 'children',
				selector: 'h1',
			},
		},
        example: {},
        edit: function (props) {
            var content = props.attributes.content;
            function onChangeContent( newContent ) {
                props.setAttributes( { content: newContent } );
            }
            
            return el(
                'section', { className: 'sub-header ' + props.className },
                el('div', { className: 'container' },
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
                'section', { className: 'sub-header ' + props.className },
                el('div', { className: 'container' },
                el( RichText.Content, {
                    tagName: 'h1',
                    className: 'sub-header__title',
                    value: props.attributes.content,
                } ))
            );
        },
    });
})(window.wp.blocks, window.wp.editor, window.wp.element);