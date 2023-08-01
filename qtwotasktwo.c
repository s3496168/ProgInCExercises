#include <stdio.h>
#include <stdlib.h>
#define min 1
#define max 10

int main (void){
    int i;
    int j;
    int k;

    for (k = 0; k <=max; ++k){
    
        for(i=max; i > j; --i){
        printf(" ");
        }
        for(j=0; j <=i; ++j){
        printf("*");
        }
    printf("\n");
}
    return EXIT_SUCCESS;
}