#include <limits.h>
#include <stddef.h>
#ifndef SHARED_H
#define SHARED_H
/**
 * The boolean type we have defined for our system
 **/
typedef enum { FALSE, TRUE } BOOLEAN;

typedef long ssize_t;
#if !defined(SSIZE_MAX)
#define SSIZE_MAX LONG_MAX
#endif
#endif
