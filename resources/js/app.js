document.addEventListener('DOMContentLoaded', function() {
    let codeBlocks = document.querySelectorAll('pre.shiki');
    codeBlocks.forEach(function(block) {
        let code = block.querySelector('code');
        let button = document.createElement('button');
        let buttonText = document.createTextNode('copy');
        button.appendChild(buttonText);
        button.style.cssText = 'position: absolute; top: 0; right: 0; margin: 4px; padding: 4px 8px; font-size: 12px; background-color: rgba(200, 200, 200, 0.2); color: #fff; border: none; border-radius: 4px; cursor: pointer; transition: all 0.2s ease-in-out;';

        button.addEventListener('mouseenter', function() {
            button.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
        });

        button.addEventListener('mouseleave', function() {
            button.style.backgroundColor = 'rgba(200, 200, 200, 0.2)';
        });

        button.addEventListener('click', function() {
            let range = document.createRange();
            range.selectNode(code);
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            button.innerText = 'copied!';
            button.style.backgroundColor = '#333';
            button.style.color = '#fff';
            setTimeout(function() {
                button.innerText = 'copy';
                button.style.backgroundColor = 'rgba(200, 200, 200, 0.2)';
                button.style.color = '#fff';
            }, 3000);
        });

        block.style.cssText = 'position: relative;';
        block.insertBefore(button, code);
    });
});