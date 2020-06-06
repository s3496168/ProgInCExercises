#include <stdlib.h>
#include <stdio.h>

int main(void) {
    enum day {
        MONDAY,
        TUESDAY,
        WEDNESDAY,
        THURSDAY,
        FRIDAY,
        SATURDAY,
        SUNDAY,
        INVALID_DAY
    };
    enum day day_of_week;
    for (day_of_week = 0; day_of_week < INVALID_DAY; ++day_of_week) {
        switch (day_of_week) {
            case MONDAY:
                printf("do I have to go? ");
                break;
            case TUESDAY:
                printf("warming up to it. ");
                break;
            case WEDNESDAY:
                printf("we've reached the hump! ");
                break;
            case THURSDAY:
                printf("near the end! ");
            /* break;*/
            case FRIDAY:
                printf("oh thank goodness! ");
                break;
            case SATURDAY:
                printf("Saturdays are awesome.\n");
            /*note the lack of break statement*/
            case SUNDAY:
                printf("wow, what a wonderful weekend!\n");
                break;
            default:
                fprintf(stderr, "Error: we should never get here.\n");
        }
    }
    return EXIT_SUCCESS;
}
