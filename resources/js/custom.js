    document.addEventListener('DOMContentLoaded', function() {
        const text = "Vincent Chandra";
        const typingElement = document.getElementById('full_name');
        let index = 0;

        function type() {
            if (index < text.length) {
                typingElement.textContent += text.charAt(index);
                index++;
                const randomSpeed = Math.floor(Math.random() * (150 - 50 + 1)) + 50;
                setTimeout(type, randomSpeed);
            }
        }

        type();
    });

    document.addEventListener('DOMContentLoaded', function() {
        const text = "Web Developer";
        const typingElement = document.getElementById('role');
        let index = 0;

        function type() {
            if (index < text.length) {
                typingElement.textContent += text.charAt(index);
                index++;
                const randomSpeed = Math.floor(Math.random() * (150 - 20 + 1)) + 20;
                setTimeout(type, randomSpeed);
            }
        }

        const initialDelay = 1200;
        setTimeout(type, initialDelay);
    });
