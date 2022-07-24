# Alert/Error
Return a view of `resources/views/alerts/error.blade.php`. The component represents an error alert.

## Usage
```html
<x-shiroyuki-tabler::alerts.error>
    <p>This is an error alert.</p>
</x-shiroyuki-tabler::alerts.error>

<x-shiroyuki-tabler::alerts.error title="An error occured">
    <p>This is an error alert.</p>
</x-shiroyuki-tabler::alerts.error>
```

## Parameters
- `title` (string, opt): The title of the alert.