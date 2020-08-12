###############################################################################
# Student Name    : Brearne Gibson
# RMIT Student ID : s3496168
#
# Startup code provided by Paul Miller for use in "Programming in C",
# study period 2, 2020
##############################################################################

How do we compile your program? 
-------------------------------
First, compile the program with a gcc compiler. The command line required (note the included flags) is:

gcc -ansi -Wall -Werror -pedantic options.c helpers.c main.c io.c -o cpt220_menu_system 

how do we run your program?
---------------------------
Type: ./cpt220_menu_system

what was your implementation approach? 
---------------------------------------
1. Determine what files and header files were avaialble
2. Determine what was already available (so to aim not to produce any duplicates)
3. Decide what would go into main.c and io.c (and subsequently to options.c)
4. Break down tasks (each task would become a function)
5. Code functions
6. Synchronise the functions from io.c with the while loop in main
***New for part C***
7. Focused on creating input in io.c, then functions for processing this data

What roadblocks did you face and how did you resolve them? 
-----------------------------------------------------------
Normal outputs to show where values are being passed through have been helpful..

Are there any known issues with your implemenatioin so far? Describe them.
---------------------------------------------------------------------------
The programmer.

If the assessor is still reading past this point, the programmer has been unable to pass the correctly stored values into a loop. Several approaches have been attempted. Hence, the menu system isn't displaying the numbers as it should. This may also be affecting the functionality of the selecting the option (testing using various normal_output printing reveals that the values are not being passed appropriately. The values are being passed in, but or not foing through to the enumerate to select the items in the switch. This includes reachine the EOF and terminating the program. 

Lessons learned from A1 Part B
-----------------------------------------------------------
Read the specification document carefully. Otherwise, requirements will be overlooked. This will result in a loss of marks.
Specifically, I failed to read about requirement 3 and hence most of the required input was missing. I was surprised
to get any marks for this at all. The last submission also reeked of 'writer is frustrated and gives up'.

Are there any known issues with your implemenatioin so far? Describe them.
---------------------------------------------------------------------------
The programmer.

If the assessor is still reading past this point, int_from_keyboard was working when the writer had daisy-chained the
function (apart from BOOLEAN long from string) to recreate the menu (please don't ask why). Unfortunately ensurang a 
working menu took up all of the time. 