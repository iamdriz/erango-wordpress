(function (blocks, editor, element, blockEditor) {
    var el = element.createElement;
    var RichText = editor.RichText;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-feature-card', {
        parent: ['erango/erango-feature-cards'],
        title: 'Feature Card',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        attributes: {
			content: {
				type: 'array',
				source: 'children',
				selector: 'h3',
			},
		},
        edit: function (props) {
            var content = props.attributes.content;
            function onChangeContent( newContent ) {
                props.setAttributes( { content: newContent } );
            }
            
            return el('div', { className: 'feature-card' },
                        el('div', { className: 'feature-card__icon' }, el( InnerBlocks, { allowedBlocks: ['core/html'] } )),
                        el( RichText, {
                            tagName: 'h3',
                            className: 'feature-card__title',
                            onChange: onChangeContent,
                            value: content,
                        } )
                );
        },
        save: function (props) {
            return el('div', { className: 'feature-card' },
                        el('div', { className: 'feature-card__icon' }, el(InnerBlocks.Content)),
                        el( RichText.Content, {
                            tagName: 'h3',
                            className: 'feature-card__title',
                            value: props.attributes.content,
                        } )
                );
        },
    });
})(window.wp.blocks, window.wp.editor, window.wp.element, window.wp.blockEditor);