document.querySelector('#AddQuesBtn').addEventListener('click', () => {
    var question = document.querySelector('#ques').value,
        option_1 = document.querySelector('#option_1').value,
        option_2 = document.querySelector('#option_2').value,
        option_3 = document.querySelector('#option_3').value,
        option_4 = document.querySelector('#option_4').value,
        option_5 = document.querySelector('#option_5').value,
        table_name = document.querySelector('#table_name').value,
        correct = document.querySelector('#correct').value,
        error = document.querySelector('#ques_error');
    
    if (question == '') {
        error.textContent = 'Enter your question';
    } else if (option_1 == '') {
        error.textContent = 'Enter the first option';
    } else if (option_2 == '') {
        error.textContent = 'Enter the second option';
    } else if (option_3 == '') {
        error.textContent = 'Enter the third option';
    } else if (option_4 == '') {
        error.textContent = 'Enter the fourth option';
    } else if (option_5 == '') {
        error.textContent = 'Enter the fifth option';
    } else if (correct == '') {
        error.textContent = 'Enter the correct option';
    } else {
        error.textContent = '';

        $.ajax({ 
            url: './php/addQues.php', 
            method: 'POST', 
            data: { 
                question: question,
                option_1: option_1,
                option_2: option_2,
                option_3: option_3,
                option_4: option_4,
                option_5: option_5,
                table_name: table_name,
                correct: correct
            }, 
            beforeSend: function () {  
                document.querySelector('#AddQuesBtn').innerHTML = `
                    <i class="fas fa-sync"></i>
                `;
            },
            success: function (data) {  
                error.textContent = '';
                document.querySelector('#AddQuesBtn').innerHTML = "Add Question";

                if (data == "done") {  
                    document.querySelector('#ques').value = '';
                    document.querySelector('#option_1').value = '';
                    document.querySelector('#option_2').value = '';
                    document.querySelector('#option_3').value = '';
                    document.querySelector('#option_4').value = '';
                    document.querySelector('#option_5').value = '';
                    document.querySelector('#correct').value = '';
                    error.textContent = '';

                    
                    $('#addQuestion').modal('hide');

                    location.reload(true);
                }
                else {  
                    error.textContent = data;
                }  
                
            } 
        });

        
    }
    
})