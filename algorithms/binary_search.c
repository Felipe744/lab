#include <stdio.h>
#include <math.h>
#include <stdbool.h> 

int main() {
    int numero = 0;
    printf("Digite um numero: ");
    scanf("%d", &numero); 
    
    int baixo = 0;
    int alto = 100;
    
    int lista[100];
    
    for(int i = 0; i <= 100; i++) {
        lista[i] = i;
    }

    int tentativas = 0;
    bool encontrado = false;  

    while (baixo <= alto) {
        tentativas++;
        int medio = (alto + baixo) / 2;
        int chute = lista[medio];
        
        printf("Tentativa %d: valor medio arredondado: %d, baixo: %d, alto: %d\n", tentativas, medio, baixo, alto);
        
        if (chute == numero) {
            printf("Numero encontrado: %d na posicao %d\n", chute, medio);
            encontrado = true;
            break;
        }
        
        if (chute < numero) {
            baixo = medio + 1;  
        }
        else {
            alto = medio - 1;
        }
    }

    if (!encontrado) {
        printf("Numero nao encontrado.\n");
    }

    return 0;
}
