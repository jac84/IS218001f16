<?php

//getrusage() -> gets data returned from the system call
//not avaiable on windows platforms? works fine on chrome
//will have different output on windows

print_r(getrusage());
/*
ru_oublock: block output operations
ru_inblock: block input operations
ru_msgsnd: messages sent
ru_msgrcv: messages received
ru_maxrss: maximum resident set size
ru_ixrss: integral shared memory size
ru_idrss: integral unshared data size
ru_minflt: page reclaims
ru_majflt: page faults
ru_nsignals: signals received
ru_nvcsw: voluntary context switches
ru_nivcsw: involuntary context switches
ru_nswap: swaps
ru_utime.tv_usec: user time used (microseconds)
ru_utime.tv_sec: user time used (seconds)
ru_stime.tv_usec: system time used (microseconds)
ru_stime.tv_sec: system time used (seconds)
*/

//check CPU usage during sleep operation
sleep(3);

$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);

//check CPU usage during forloop
for($i=0;$i<10000000;$i++) {
 
}

$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);

?>
