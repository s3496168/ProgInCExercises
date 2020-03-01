#include "main.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "fileio.h"
#include "ui.h"

enum arg_values
{
        AV_NOARGS = 1,
        AV_FILEARG,
        AV_INVALID
};

/**
 * explain to the user of your program how to use it correctly, when they have
 * provided incorrect args.
 **/
void display_usage(void)
{
        fprintf(stderr,
                "You need to call this program as follows: \n"
                "        ./cpt220_ed [filepath]\n"
                "Where filepath is an optional path to a file to load.\n");
}

/**
 * Initialise the editor system  according to the value of fname. If
 *fname is
 * not NULL, load the file path specified.
 **/
BOOLEAN init_system(struct editor_system* thesystem, const char fname[])
{
        thesystem->loaded_file = linkedlist_make();
        if (!thesystem->loaded_file)
        {
                return FALSE;
        }
        if (fname)
        {
                if (!load_file(fname, thesystem->loaded_file))
                {
                        return FALSE;
                }
                thesystem->file = strdup(fname);
        }
        else
        {
                thesystem->file = NULL;
        }
        thesystem->modified = FALSE;
        init_action_array(thesystem->functions);
        return TRUE;
}

int main(int argc, char* argv[])
{
        struct editor_system thesystem;
        /* initialise the system */
        switch ((enum arg_values)argc)
        {
                case AV_NOARGS:
                {
                        /* no args passed in */
                        if (!init_system(&thesystem, NULL))
                        {
                                return EXIT_FAILURE;
                        }
                }
                break;
                case AV_FILEARG:
                {
                        /* one file arg passed in */
                        if (!init_system(&thesystem, argv[argc - 1]))
                        {
                                return EXIT_FAILURE;
                        }
                }
                break;
                default:
                {
                        display_usage();
                        return EXIT_FAILURE;
                }
                break;
        }
        /* save the file back to disk */
        if (!save_file(thesystem.file, thesystem.loaded_file))
        {
                fprintf(stderr, "Error: failed to save file %s\n",
                        thesystem.file);
        }
        return EXIT_SUCCESS;
}
