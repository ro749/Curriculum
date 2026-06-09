@push('scripts')
<script>
    var initial_positions = [];
    var bubble_popped = null; 

    function check_initial_position(x, y) {
        for (let i = 0; i < initial_positions.length; i++) {
            const pos = initial_positions[i];
            let relx = pos.x - x;
            let rely = pos.y - y;
            if (relx*relx + rely*rely < 216*216) {
                return false;
            }
        }
        return true;
    }

    function create_bubble(title,link) {
        var wrapper = document.createElement('div');
        var bubble = document.createElement('div');
        var back = document.createElement('div');
        var text = document.createElement('p');
        text.classList.add('bubble-text');
        text.innerHTML = title;
        wrapper.classList.add('bubble-wrapper');
        back.classList.add('bubble-back');
        bubble.classList.add('bubble');
        wrapper.appendChild(back);
        wrapper.appendChild(bubble);
        wrapper.appendChild(text);
        document.getElementById('wrapper').appendChild(wrapper);
        $(wrapper).on('click', function(e) {
            const transform = getComputedStyle(wrapper).transform;
            if(wrapper._anim) {
                wrapper._anim.pause();
                wrapper._anim.cancel();
            }
            wrapper.animate([
                { transform: transform, opacity: 1 },
                { transform: `${transform} scale(2)`, opacity: 0 }
            ],{
                duration: 500,
                fill: 'forwards',
                easing: 'ease-out',
            }).finished.then(() => {
                bubble_popped = {
                    title: title,
                    link: link
                };
                wrapper.remove();
                if(link.startsWith('#')) {
                    $('.info').hide();
                    $(link).show();
                    $('#aero')[0].animate([
                        { transform: 'translate(-50%, -200%)' },
                        { transform: 'translate(-50%, -50%)'}
                    ], {
                        duration: 500,
                        fill: 'forwards',
                        easing: 'ease-out',
                    });
                } else {
                    window.open(link, '_blank');
                    setTimeout(() => {
                        create_bubble(bubble_popped.title, bubble_popped.link);
                    },1000);
                }
            });
        });
        var x = Math.random() * (window.innerWidth-324) + 108;
        var y = Math.random() * (window.innerHeight-324) + 108;
        while (!check_initial_position(x, y)) {
            x = Math.random() * (window.innerWidth-324) + 108;
            y = Math.random() * (window.innerHeight-324) + 108;
        }
        initial_positions.push({x: x, y: y});
        const length = Math.sqrt(x*x+y*y);
        wrapper.posx = x;
        wrapper.posy = y;
        wrapper.animate([
            { transform: 'translate(0, 0)' },
            { transform: 'translate('+x+'px, '+y+'px)' }
        ], {
            duration: length,
            fill: 'forwards',
            easing: 'ease-out',
        }).finished.then(() => {
            wander(wrapper);
        });
        wrapper.top = y;
        wrapper.left = x;
    }

    function check_wander_position(x, y) {
        if(x > window.innerWidth-216 || x < 216 || y > window.innerHeight-216 || y < 216) {
            return false;
        }
        return true;
    }

    function wander(bubble) {
        var x = Math.random() * 216 - 108;
        var y = Math.random() * 216 - 108;
        while (!check_wander_position(bubble.posx+x, bubble.posy+y)) {
            x = Math.random() * 216 - 108;
            y = Math.random() * 216 - 108;
        }
        const length = Math.sqrt(x*x+y*y);
        bubble._anim = bubble.animate([
            { transform: 'translate('+bubble.posx+'px, '+bubble.posy+'px)' },
            { transform: 'translate('+(bubble.posx+x)+'px, '+(bubble.posy+y)+'px)' }
        ], {
            duration: length*36.0,
            fill: 'forwards',
            easing: 'ease-in-out',
        });
        bubble._anim.finished.then(() => {
            bubble.posx = bubble.posx+x;
            bubble.posy = bubble.posy+y;
            wander(bubble);
        });

    }
</script>
@endpush