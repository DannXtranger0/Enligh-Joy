<x-verb-to-be-challenge>


    <x-title>Choose The Correct Option</x-title>
    
    <p class="ml-20 paragraph">Fill in the  blank by selecting the correct answer</p>
    
    <form action="" class=" my-10 space-y-10">
        @csrf
      
        <x-question-challenge 
        number_question="1"
        start="1.She"
        finish="my sister"
        a="am"
        b="is"
        c="are"
        color="#5F3A84"
        />
    
        <x-question-challenge 
        number_question="2"
        start="2. We"
        finish="ready for the trip"
        a="am"
        b="is"
        c="are"
        color="#5F3A84"
        />
    
        <x-question-challenge 
        number_question="3"
        start="3. I"
        finish="ready for the trip"
        a="am"
        b="is"
        c="are"
        color="#5F3A84"
        />
    
        <x-question-challenge 
        number_question="4"
        start="4."
        finish="they at the library today?"
        a="we"
        b="are"
        c="is"
        color="#a18f2d"
        />
    
        <x-question-challenge 
        number_question="5"
        start="5."
        finish="you interested in learning Spanish?"
        a="we"
        b="are"
        c="is"
        color="#a18f2d"
        />
    
        <x-question-challenge 
        number_question="6"
        start="6. Where"
        finish="he going after school?"
        a="we"
        b="are"
        c="is"
        color="#a18f2d"
        />
    
        
        <x-question-challenge 
        number_question="7"
        start="7. She"
        finish="happy about the results."
        a="isn't"
        b="aren't"
        c="am not"
        color="#4A90E2"
        />
    
        <x-question-challenge 
        number_question="8"
        start="8. We"
        finish="going to the party tonight."
        a="isn't"
        b="aren't"
        c="am not"
        color="#4A90E2"
        />
    
    
        <x-question-challenge 
        number_question="9"
        start="9. I"
        finish="sure about this decision."
        a="isn't"
        b="aren't"
        c="am not"
        color="#4A90E2"
        />
    
        
        <button type="submit" class="btn-verify">Verify</button>
    
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const correctAnswers = {
              1: 'is',
              2: 'are',
              3: 'am',
              4: 'are',
              5: 'are',
              6: 'is',
              7: "isn't",
              8: "aren't",
              9: "am not",
            };
        
            document.querySelector('.btn-verify').addEventListener('click', function (event) {
              event.preventDefault(); // Evita que el formulario se envíe
        
              // Verifica las respuestas
              for (let questionNumber in correctAnswers) {
                  const selectedAnswer = document.querySelector(`input[name='question-${questionNumber}']:checked`);
                  const questionDiv = document.getElementById(`question-${questionNumber}`);
        
                  if (selectedAnswer) {
                      const answerValue = selectedAnswer.value;
        
                      if (answerValue === correctAnswers[questionNumber]) {
                          questionDiv.style.border = '3px solid green'; // Respuesta correcta
                      } else {
                          questionDiv.style.border = '3px solid darkred'; // Respuesta incorrecta
                      }
                  }
                 
              }
           });
        });
        </script>
        
    </x-verb-to-be-challenge>