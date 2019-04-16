drop table if exists task;


create table task(
taskId binary(20) not null,
taskTitle varchar(255) not null,
taskStartDate datetime,
taskDueDate datetime,
taskStatus varchar(64) not null,
taskPriority varchar(64) not null,
taskDescription varchar(256)
);
