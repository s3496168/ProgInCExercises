#include <stdio.h>
#include <stdlib.h>
#define min 1
#define max 10

int main (void){
    int i;
    int j;
    for(i=min; i < max; ++i){
        for(j=min; j < i; ++j){
        printf("*");
        }
        printf("\n");
    }

    return EXIT_SUCCESS;
}