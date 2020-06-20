#include <stdlib.h>
#include <stdio.h>

/** computing the distance of a marathon in kilometres **/
int main(void) {
    double miles, yards;
    double kilometres;
    yards = 26;
    miles = 385;
    kilometres = 1.609 * (miles + yards / 1760);
    printf("%f miles, %f yards, %f kilometres\n", miles, yards, kilometres);
    return EXIT_SUCCESS;
}
