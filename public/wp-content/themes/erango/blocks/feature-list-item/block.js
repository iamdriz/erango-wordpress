(function (blocks, editor, element, blockEditor) {
    var el = element.createElement;
    var RichText = editor.RichText;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-feature-list-item', {
        parent: ['erango/erango-feature-list'],
        title: 'Feature List Item',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        attributes: {
			feature_title: {
				type: 'array',
				source: 'children',
				selector: 'h3',
			},
            feature_description: {
                type: 'array',
                source: 'children',
                selector: 'p',
            }
		},
        edit: function (props) {
            var feature_title = props.attributes.feature_title;
            function onChangeFeatureTitle( feature_title ) {
                props.setAttributes( { feature_title: feature_title } );
            }
            var feature_description = props.attributes.feature_description;
            function onChangeFeatureDescription( new_feature_description ) {
                props.setAttributes( { feature_description: new_feature_description } );
            }
            
            return el('div', { className: 'feature-list-item' },
                        el('div', { className: 'feature-list-item__icon' }, el( InnerBlocks, { allowedBlocks: ['core/html'] } )),
                        el('div', { className: 'feature-list-item__content' },
                            el( RichText, {
                                tagName: 'h3',
                                className: 'feature-list-item__title',
                                placeholder: 'Feature title',
                                onChange: onChangeFeatureTitle,
                                value: feature_title,
                            } ),
                            el( RichText, {
                                tagName: 'p',
                                className: 'feature-list-item__description',
                                placeholder: 'Feature content.',
                                onChange: onChangeFeatureDescription,
                                value: feature_description,
                            } )
                        )
                );
        },
        save: function (props) {
            return el('div', { className: 'feature-list-item' },
                        el('div', { className: 'feature-list-item__icon' }, el(InnerBlocks.Content)),
                        el('div', { className: 'feature-list-item__content' },
                            el( RichText.Content, {
                                tagName: 'h3',
                                className: 'feature-list-item__title',
                                value: props.attributes.feature_title,
                            } ),
                            el( RichText.Content, {
                                tagName: 'p',
                                className: 'feature-list-item__description',
                                value: props.attributes.feature_description,
                            } )
                        )
                );
        },
    });
})(window.wp.blocks, window.wp.editor, window.wp.element, window.wp.blockEditor);