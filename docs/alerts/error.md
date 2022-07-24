# Alert/Error
Return a view of `resources/views/alerts/error.blade.php`. The component represents an error alert.

## Usage
```html
<x-tabler::alerts.error>
    <p>This is an error alert.</p>
</x-tabler::alerts.error>

<x-tabler::alerts.error title="An error occured">
    <p>This is an error alert.</p>
</x-tabler::alerts.error>
```

## Parameters
- `title` (string, opt): The title of the alert.