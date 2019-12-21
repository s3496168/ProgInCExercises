#include <stdio.h>
#include <stdlib.h>

int main(void) {
    double miles, yards;
    float kilometers;
    yards = 26;
    miles = 385;
    kilometers = 1.60 * (miles + yards / 1760);
    printf("%g miles, %g yards = %f kilometers\n", miles, yards, kilometers);
    return EXIT_SUCCESS;
}
