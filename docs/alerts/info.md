# Alert/Error
Return a view of `resources/views/alerts/info.blade.php`. The component represents an info alert.

## Usage
```html
<x-tabler::alerts.info>
    <p>This is an info alert.</p>
</x-tabler::alerts.info>

<x-tabler::alerts.info title="Hey, there's an info for you">
    <p>This is an info alert.</p>
</x-tabler::alerts.info>
```

## Parameters
- `title` (string, opt): The title of the alert.