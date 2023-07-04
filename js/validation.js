
document.addEventListener('DOMContentLoaded', function(){
    const input_name = document.querySelector('#name');
    const input_mail = document.querySelector('#mail');
    const input_quest = document.querySelector('#quest');
    
    const name_pattern = /^[A-ZА-ЯЁ][a-zа-яё]*$/;
    const mail_pattern = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
    const quest_pattern = /.+/;

    
    
    input_name.onchange = function() {
        this.value = this.value.replace(' ', '');
    };
    
    input_mail.onchange = function() {
        this.value = this.value.replace(' ', '');
    };
    
    const name_warn = document.querySelector('.name-warn');
    const mail_warn = document.querySelector('.mail-warn');
    const quest_warn = document.querySelector('.quest-warn');

    

    document.querySelector('#submit').addEventListener('click', function(e){
        e.preventDefault();
        
        const isvalid_name = name_pattern.test(input_name.value);
        const isvalid_mail = mail_pattern.test(input_mail.value);
        const isvalid_quest = quest_pattern.test(input_quest.value);

        warn(name_warn, isvalid_name);
        warn(mail_warn, isvalid_mail);
        warn(quest_warn, isvalid_quest);

        if (isvalid_name && isvalid_mail && isvalid_quest) {
            document.querySelector('#form').submit();
        }
    });
});


function warn(element,isvalid){
    if (isvalid) {
        element.classList.add('disable');
    } else {
        element.classList.remove('disable');
    }
};


/* Promise */
const prom = new Promise((resolve, reject)=>{
    setTimeout(()=>{
        resolve("Готово");
    }, 5000);
    
});

prom.then(
    (result)=>{
        console.log(result);
    }
);

//console.log(prom);
//console.log('some text');

/*
const res = fetch('./test.php',{
    method: 'POST',
    body: 'some text in lowercase',
});

res.then(
    (result)=>{
        result.text().then(
            (result)=>{
                console.log(result);
            }
        );
    }
);
*/

//console.log(res);
