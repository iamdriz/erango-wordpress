(function (blocks, editor, element, blockEditor) {
    var el = element.createElement;
    var RichText = editor.RichText;
    var InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('erango/erango-staff-list-item', {
        parent: ['erango/erango-staff-list'],
        title: 'Staff List Item',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        attributes: {
			staff_title: {
				type: 'array',
				source: 'children',
				selector: 'h3',
			},
            staff_description: {
                type: 'array',
                source: 'children',
                selector: 'p',
            }
		},
        edit: function (props) {
            var staff_title = props.attributes.staff_title;
            function onChangeStaffTitle( new_staff_title ) {
                props.setAttributes( { staff_title: new_staff_title } );
            }
            var staff_description = props.attributes.staff_description;
            function onChangeStaffDescription( new_staff_description ) {
                props.setAttributes( { staff_description: new_staff_description } );
            }
            
            return el('div', { className: 'staff-list-item' },
                        el('div', { className: 'staff-list-item__icon' }, el( InnerBlocks, { allowedBlocks: ['core/html'] } )),
                        el('div', { className: 'staff-list-item__content' },
                            el( RichText, {
                                tagName: 'h3',
                                className: 'staff-list-item__title',
                                placeholder: 'Staff title',
                                onChange: onChangeStaffTitle,
                                value: staff_title,
                            } ),
                            el( RichText, {
                                tagName: 'p',
                                className: 'staff-list-item__description',
                                placeholder: 'Staff content.',
                                onChange: onChangeStaffDescription,
                                value: staff_description,
                            } )
                        )
                );
        },
        save: function (props) {
            return el('div', { className: 'staff-list-item' },
                        el('div', { className: 'staff-list-item__icon' }, el(InnerBlocks.Content)),
                        el('div', { className: 'staff-list-item__content' },
                            el( RichText.Content, {
                                tagName: 'h3',
                                className: 'staff-list-item__title',
                                value: props.attributes.staff_title,
                            } ),
                            el( RichText.Content, {
                                tagName: 'p',
                                className: 'feature-list-item__description',
                                value: props.attributes.staff_description,
                            } )
                        )
                );
        },
    });
})(window.wp.blocks, window.wp.editor, window.wp.element, window.wp.blockEditor);