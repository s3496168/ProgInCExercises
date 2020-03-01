/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "fileio.h"
#include <assert.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "ui.h"

/**
 * loads the filename specified into the linked list. The currently loaded
 * file's data should be freed.
 **/
BOOLEAN load_file(const char fname[], struct linkedlist* thelist)
{
        FILE* reader;
        char line[BUFSIZ + EXTRACHARS];
        ssize_t line_count = 0;

        /* document our assumption that the list cannot be NULL */
        assert(thelist);
        /* open the file for reading */
        reader = fopen(fname, "r");
        if (!reader)
        {
                perror("fopen");
                return FALSE;
        }
        /* read each line from the file */
        while (fgets(line, BUFSIZ + EXTRACHARS, reader))
        {
                ssize_t len;
                struct line* newline;
                len = strlen(line);
                /* check that the line read is not longer than allowed */
                if (line[len - 1] != '\n')
                {
                        fprintf(stderr, "Error: line too long.\n");
                        fclose(reader);
                        return FALSE;
                }
                /* remove the newline character now we know the line has been
                 * read completely
                 */
                line[len - 1] = 0;
                ++line_count;
                --len;
                newline = line_make(line_count, line, len);
                if (!linkedlist_add(thelist, newline, line_count - 1))
                {
                        fclose(reader);
                        return FALSE;
                }
        }
        /* double check that we are at the end of the file, otherwise an
         * error has occured */
        if (!feof(reader))
        {
                perror("read failed");
                return FALSE;
        }
        fclose(reader);
        printf("Successfully loaded %s\n", fname);
        return TRUE;
}

/**
 * saves the currently loaded file's data into the tilename specified.
 **/
BOOLEAN save_file(const char fname[], struct linkedlist* thelist)
{
        FILE* writer;
        BOOLEAN funcresult = TRUE;

        /* open the file for writing */
        writer = fopen(fname, "w");
        if (!writer)
        {
                /* handles the case when we try to write to a readonly file */
                perror("fopen");
                return FALSE;
        }
        /* send the file data to the output file */
        if (linkedlist_save(writer, thelist))
        {
                printf("Successfully saved %s\n", fname);
                funcresult = TRUE;
        }
        else
        {
                funcresult = FALSE;
        }
        /* don't forget to close the output file */
        fclose(writer);
        return funcresult;
}
