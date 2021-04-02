(function (blocks, editor, element) {
    var el = element.createElement;
    var RichText = editor.RichText;

    blocks.registerBlockType('erango/erango-contact-links', {
        title: 'Contact Links',
        icon: 'email',
        category: 'layout',
        example: {},
        edit: function (props) {            
            return el(
                'ul', { className: 'contact-links' },
                    el('li', { className: 'contact-link' }, el('a', { href: 'mailto:hello@erango.co.uk', target: '_blank', rel: 'noopener' }, el('i', { className: 'far fa-envelope' }),  el('span', {}, 'hello@erango.co.uk') )),
                    el('li', { className: 'contact-link' }, el('a', { href: 'tel:08001981168', target: '_blank', rel: 'noopener' }, el('i', { className: 'far fa-phone' }),  el('span', {}, '0800 198 1168') )),
                    el('li', { className: 'contact-link' }, el('a', { href: 'https://twitter.com/erango', target: '_blank', rel: 'noopener' }, el('i', { className: 'fab fa-twitter' }),  el('span', {}, '@erango') )),
                );
        },
        save: function (props) {
            return el(
                'ul', { className: 'contact-links' },
                    el('li', { className: 'contact-link' }, el('a', { href: 'mailto:hello@erango.co.uk', target: '_blank', rel: 'noopener' }, el('i', { className: 'far fa-envelope' }),  el('span', {}, 'hello@erango.co.uk') )),
                    el('li', { className: 'contact-link' }, el('a', { href: 'tel:08001981168', target: '_blank', rel: 'noopener' }, el('i', { className: 'far fa-phone' }),  el('span', {}, '0800 198 1168') )),
                    el('li', { className: 'contact-link' }, el('a', { href: 'https://twitter.com/erango', target: '_blank', rel: 'noopener' }, el('i', { className: 'fab fa-twitter' }),  el('span', {}, '@erango') )),
                );
        },
    });
})(window.wp.blocks, window.wp.editor, window.wp.element);