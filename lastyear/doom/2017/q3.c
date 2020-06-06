#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#include "q3.h"

int main(void) { return EXIT_SUCCESS; }

void move_token(enum cell_contents gameboard[BOARDHEIGHT][BOARDWIDTH],
                struct coordinate* coord) {
    /*test to see if the gameboard is empty; if it is empty return false*/
    if (gameboard[coord->y][coord->x] != CC_EMPTY) {
        BOOLEAN success = FALSE;
        int newy, newx;
        time_t t;
        /*using dodge srand for demo purpose only*/
        srand((unsigned)time(&t));
        /*while loop for generating the random noumber-recall rand already
         * having been called in*/
        while (!success) {
            /*generate random x and y co-ordinates-marks given*/
            newy = rand() % BOARDHEIGHT;
            newx = rand() % BOARDWIDTH;
            /*test to see if location is empty*/
            if (gameboard[newx][newy] == CC_EMPTY) {
                enum cell_contents old_contents = gameboard[coord->y][coord->x];
                /*swap the content of the two array locations*/
                gameboard[coord->y][coord->x] = CC_EMPTY;
                gameboard[newy][newx] = old_contents;
                coord->y = newy;
                coord->x = newx;
                /*return success*/
                success = TRUE;
            }
        }
    }
}
