<?php
class User {
    private $data = [];

    public function __get($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }

    public function __call($name, $arguments) {
        if ($name === 'fullName') {
            return $this->data['first_name'] . ' ' . $this->data['last_name'];
        }
    }
}

// Usage
$user = new User();
$user->first_name = 'John';
$user->last_name = 'Doe';

echo $user->first_name; // Output: John
echo "<br>";
echo $user->last_name; // Output: Doe
echo "<br>";
echo $user->age; // Output: null (property not set)
echo "<br>";

if (isset($user->first_name)) {
    echo "First name is set";
} else {
    echo "First name is not set";
}
echo "<br>";

unset($user->last_name);
if (isset($user->last_name)) {
    echo "Last name is set";
} else {
    echo "Last name is not set";
}
echo "<br>";

echo $user->fullName(); // Output: John Doe
