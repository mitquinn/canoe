<form action="/post" onsubmit="submitForm(); return false;">
    Choice A: <input type="text" name="choices[]"/>
    Choice B: <input type="text" name="choices[]"/>
    Choice C: <input type="text" name="choices[]"/>
    <input type="submit" value="Submit"/>
</form>


<script>

    function submitForm()
    {
        var inputs = document.getElementsByName('choices[]');
        var choices = [];
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].value) {
                choices.push(inputs[i].value.toLowerCase());
            }
        }

        // if (!choices.includes('calculus')) {
        //     alert("You must pick calculus.");
        //     return false;
        // }

        var http = new XMLHttpRequest();
        var url = '/posts';
        http.open('POST', url, true);
        http.setRequestHeader('Content-type', 'application/json');

        http.onreadystatechange = function() {
            if(http.readyState == 4 && http.status == 200) {
                alert("Success");
                return true;
            }
        }
        http.send(JSON.stringify(choices));
    }
</script>
