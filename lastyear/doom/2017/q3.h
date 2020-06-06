#include <stdio.h>
#include <stdlib.h>
#include "q3-shared.h"

#define BOARDWIDTH 50
#define BOARDHEIGHT 50

enum cell_contents {
    CC_EMPTY,
    CC_RED,
    CC_BLUE
};

enum cell_contents gameboard[BOARDHEIGHT][BOARDWIDTH];

struct coordinate {
    int x, y;
};

BOOLEAN success;

void move_token(enum cell_contents gameboard[BOARDHEIGHT][BOARDWIDTH],
                struct coordinate* coord);
