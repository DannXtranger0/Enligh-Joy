<x-numbers-challenge>
    <x-title>Choose The Correct Option</x-title>

    <p class="ml-20 paragraph">Look carefully at the images and choose the correct answer for each question.</p>

    <form action="" class="my-10 space-y-10">
        @csrf

     <x-question-challenge-image-numbers
     number_question="1"
     text=""
     img="images\challenges\numbers\1.png"
     a="1"
     b="8"
     c="7"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="2"
     text=""
     img="images\challenges\numbers\2.png"
     a="11th"
     b="9th"
     c="1th"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="3"
     text=""
     img="images\challenges\numbers\3.png"
     a="Twenty-one"
     b="One hundred"
     c="Ten"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="4"
     text=""
     img="images\challenges\numbers\4.png"
     a="18"
     b="34"
     c="80"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="5"
     text=""
     img="images\challenges\numbers\5.png"
     a="Thirty-seven"
     b="Thirty-second"
     c="Twenty-two"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="6"
     text=""
     img="images\challenges\numbers\6.png"
     a="20th"
     b="52nd"
     c="11th"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="7"
     text=""
     img="images\challenges\numbers\7.png"
     a="101"
     b="29"
     c="1000"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="8"
     text=""
     img="images\challenges\numbers\8.png"
     a="64th"
     b="56th"
     c="56"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="9"
     text=""
     img="images\challenges\numbers\9.png"
     a="Forty-nine"
     b="Fifty-second"
     c="Sixty-one"
     color="#5F3A84"
     />

     <x-question-challenge-image-numbers
     number_question="10"
     text=""
     img="images\challenges\numbers\10.png"
     a="Eihgty-seventh"
     b="Seventy-nine"
     c="Eighty-seven"
     color="#5F3A84"
     />


        <div class="flex items-center space-x-4 mt-4">
            <button type="button" class="btn-verify">Verify</button>
            <div class="results border-2 border-red-600 px-6 left-64 w-1/4 relative p-4 rounded hidden">
                <p id="result-text" class="paragraph"></p>
            </div>
        </div>

         {{-- <!-- Contenedor para la imagen de respuesta correcta/incorrecta -->
     <div class="result-icon" style="position: absolute; top: 10px; right: 10px;">
        <img id="icon-{{ $number_question }}" style="display: none; width: 20px;" alt="">
    </div> --}}
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const correctAnswers = {
                1: 'Drink',
                2: 'runs',
                3: 'dance',
                4: 'does',
                5: 'Do',
                6: "doesn't have",
                7: 'has',
                8: 'take',
                9: 'works',
                10: 'does',
            };

            const totalQuestions = Object.keys(correctAnswers).length;

            document.querySelector('.btn-verify').addEventListener('click', function (event) {
                event.preventDefault(); // Evita que el formulario se envíe

                // Inicializo contadores en 0
                let correctCount = 0;
                let incorrectCount = 0;

                // Verifica las respuestas
                for (let questionNumber in correctAnswers) {
                    const selectedAnswer = document.querySelector(`input[name='question-${questionNumber}']:checked`);
                    const questionDiv = document.getElementById(`question-${questionNumber}`);
                    const icon = document.getElementById(`icon-${questionNumber}`); // Selecciona la imagen correspondiente

                    // // Si no existe la imagen, la creamos
                    // if (!icon) {
                    //     icon = document.createElement('img');
                    //     icon.style.width = '20px'; // Ajusta el tamaño de la imagen
                    //     icon.style.position = 'relative'; // Posicionamiento relative
                    //     icon.style.right = '-70vw'; // Espaciado desde la derecha
                    //     icon.style.top = '-11vw'; // Espaciado desde la parte superior
                    //     questionDiv.appendChild(icon); // Agregar la imagen al div
                    // }

                    if (selectedAnswer) {
                        const answerValue = selectedAnswer.value;

                        if (answerValue === correctAnswers[questionNumber]) {
                            questionDiv.style.border = '3px solid #1CED49'; // Respuesta correcta
                            icon.src = '{{ asset('images/correct.png') }}'; // Ruta a la imagen de check
                            icon.style.display = 'inline'; // Mostrar la imagen
                            correctCount++;
                        } else {
                            questionDiv.style.border = '3px solid #912F2F'; // Respuesta incorrecta
                            icon.src = '{{ asset('images/incorrect.png') }}'; // Ruta a la imagen de X
                            icon.style.display = 'inline'; // Mostrar la imagen
                            incorrectCount++;
                        }

                    // } else {
                    //     incorrectCount++; // Contar como incorrecta si no se selecciona respuesta
                     }
                }
                
                // Mostrar resultados
                const resultText = document.getElementById('result-text');
                resultText.innerHTML = `
                    <span class="text-red-600">¡Errors!: ${incorrectCount}</span><br>
                    <span class="text-green-600">¡Corrects!: ${correctCount} / 9</span>`;
                
                // Hacer visible el contenedor de resultados
                document.querySelector('.results').classList.remove('hidden');

                // // Redirigir si todas las respuestas son correctas
                // if (correctCount === totalQuestions) {
                //     window.location.href = '/present-simple-challenge/2'; 
                // }
            });
        });
    </script>
</x-numbers-challenge>
