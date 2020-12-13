#include <stdio.h>
#include <stdlib.h>

#define stars 10
#define max 11

int main (void){
    int a,b,c,d;

    for (a=0; a <=max; ++a){
        if (a % 2 == 0){
            for (b = 0; b <= 1; ++b){
                printf(" ");
            }
            for(c = 1; c <= stars; ++c){
                printf("* ");

            }
        } else {
                for (d =0; d <= max; ++d){
                    printf("* ");
                }
        }
        printf("\n");
    }

    return EXIT_SUCCESS;
}