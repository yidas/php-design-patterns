PHP Worker Design
=================

This chapter introduces the worker implemnetation by using orignal PHP.

> Extension way to implement Process/Thread on PHP: [PECL pthreads](http://php.net/manual/en/class.thread.php)

CONCEPT
-------

Use PHP CLI to run the worker script, there are some main points as following:

1. Prevent any continuous growth of runtime memory usage.

2. Common connections such as MySQL Database or Redis memorycache always refresh the connection while any transmission as default, so that you could create connect at first then use the connection for listen or operating continuously.

3. As above, if you have any idle connection scenario, you should design re-connecting for each cyclic process.

4. Listening with high frequency would cost the usage, you could listen with low frequency but when getting and done a task, executing next listen without sleep.

---

STRUCTURES
----------

<img src="https://raw.githubusercontent.com/yidas/php-design-patterns/master/worker/structure-types.png" />



