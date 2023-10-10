Master-Slave Architecture. 
Brief Introduction of "Architecture of Distributed Database" like-
Client server Architecture, 
Peer to peer Architecture, 
Master Slave Architecture, 
Layered Pattern Architecture &
Model View Controller Architecture.

Master-Slave Architecture. ==
Master-Slave Architecture is a design pattern commonly used in computer systems and distributed computing to manage communication and coordination between multiple components or processes. It involves the delegation of control and responsibility to one central component (the "master" or "controller") while other components (the "slaves" or "workers") perform tasks as directed by the master.

Here are some key points about Master-Slave Architecture:

Centralized Control: The master component has overall control and makes decisions for the entire system. It distributes tasks or workloads to the slave components.

Parallel Processing: Slave components typically perform tasks in parallel, allowing for increased efficiency and scalability in computing tasks.

Fault Tolerance: Master-Slave Architectures often incorporate mechanisms for fault tolerance. If the master fails, a new master can be elected or failover mechanisms can be in place to ensure system reliability.

Load Balancing: Load balancing can be implemented to distribute work evenly among slave components, ensuring optimal resource utilization.

Examples:

In database systems, a master-slave configuration is used for replication, where the master database handles write operations, and slave databases replicate data from the master for read operations.
In distributed computing, MapReduce frameworks like Hadoop utilize master-slave architecture for data processing.
Challenges:

Synchronization: Ensuring that slave components are in sync with the master can be complex, especially in distributed systems.
Single Point of Failure: If the master component fails without a backup, it can disrupt the entire system.
Scalability: Scalability can be challenging, as the master may become a bottleneck as the system grows.

-------------------------------------------------------------------------------------------------
