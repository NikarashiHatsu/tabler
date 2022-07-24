# Alert/Error
Return a view of `resources/views/alerts/warning.blade.php`. The component represents an warning alert.

## Usage
```html
<x-shiroyuki-tabler::alerts.warning>
    <p>This is a warning alert.</p>
</x-shiroyuki-tabler::alerts.warning>

<x-shiroyuki-tabler::alerts.warning title="Something is not right...">
    <p>This is a warning alert.</p>
</x-shiroyuki-tabler::alerts.warning>
```

## Parameters
- `title` (string, opt): The title of the alert.