(function (blocks, element, blockEditor, editor, components) {
    var el = element.createElement;
    var InnerBlocks = blockEditor.InnerBlocks;

    const { RichText, InspectorControls } = editor;
	const { Fragment } = element;
	const {
        TextControl,
        CheckboxControl,
        RadioControl,
        SelectControl,
        TextareaControl,
        ToggleControl,
        RangeControl,
        Panel,
        PanelBody,
        PanelRow
    } = components;

    blocks.registerBlockType('erango/erango-section-block', {
        title: 'Section Block',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        attributes: {
            section_id: {
                type: 'string',
            },
            section_class: {
                type: 'string',
            },
        },
        edit: function (props) {
            return (
                el( Fragment, {},

                    /*  
                     * SETTINGS
                     */
                    el( InspectorControls, {},
                        el( PanelBody, { title: 'Section Settings', initialOpen: true },
         
                            el( PanelRow, {},
                                el( TextControl,
                                    {
                                        label: 'Section ID',
                                        onChange: ( value ) => {
                                            props.setAttributes( { section_id: value } );
                                        },
                                        value: props.attributes.section_id
                                    }
                                ),
                            ),

                            el(PanelRow, {},
                                el( SelectControl,
                                    {
                                        label: 'Section Color',
                                        options : [
                                            { label: 'Section White', value: 'section--white' },
                                            { label: 'Section Off White', value: 'section--off-white' },
                                            { label: 'Section Orange', value: 'section--orange' },
                                            { label: 'Section Blue', value: 'section--blue' },
                                        ],
                                        onChange: ( value ) => {
                                            props.setAttributes( { section_class: value } );
                                        },
                                        value: props.attributes.section_class
                                    }
                                )
                            )
                        ),
                    ),

                    /* TODO: add classnames JS to build up the class instead */
         
                    /*  
                     * BLOCK
                     */
                    el(
                        'section', { className: 'section ' + props.attributes.section_class + ' ' + props.className },
                        el('div', { className: 'section__inner container' },
                            el(InnerBlocks))
                    )
         
                ));
        },
        save: function (props) {
            return el(
                'section', { className: 'section ' + props.attributes.section_class + ' ' + props.className },
                el('div', { className: 'section__inner container' },
                    el(InnerBlocks.Content))
            );
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor, window.wp.editor, window.wp.components);