# Form/Alerts
Return instances of:
1. [`Alerts/Error`](../alerts/error.md) if there's a session with key `error`, or if there's any validation error.
2. [`Alerts/Info`](../alerts/info.md) if there's a session with key `info`.
3. [`Alerts/Success`](../alerts/success.md) if there's a session with key `success`.
4. [`Alerts/Warning`](../alerts/warning.md) if there's a session with key `warning`.

## Usage
```html
<x-shiroyuki-tabler::form.alerts />

<x-shiroyuki-tabler::form.alerts
    error-title="An error occured!"
    info-title="Hey, there's an info for you"
    success-title="Cool! You're great to go!"
    warning-title="Something is not right..."
/>
```

## Parameters
- `error-title` (string, opt): The title of the error alert.
- `info-title` (string, opt): The title of the info alert.
- `success-title` (string, opt): The title of the success alert.
- `warning-title` (string, opt): The title of the warning alert.