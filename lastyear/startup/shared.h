/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include <limits.h>
#include <stddef.h>
#ifndef SHARED_H
#define SHARED_H
/**
 * The boolean type we have defined for our system
 **/
typedef enum {
    FALSE,
    TRUE
} BOOLEAN;

/**
 * definition of the ssize_t type and its maximum and miniumum sizes in a
 * portable way.
 **/
typedef long ssize_t;
#if !defined(SSIZE_MAX)
#define SSIZE_MAX LONG_MAX
#define SSIZE_MIN LONG_MIN
#endif
#endif
