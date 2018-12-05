MVC
===

### Example App add-on structure for Yii2

```
yii2-app/
├── components/     Yii2 customized component
├── forms/          Form
├── heplers/        Helper
├── models/         Models (Active Record)
├── presenters/     Presenter
├── services/       Service
└── widgets/        Yii2 Widget
```

Strict version:

```
yii2-app/
├── components/         Yii2 customized component
├── heplers/            Helper
├── models/             Form
    ├── entities/       Entity (Active Record)
    ├── forms/          Form
    ├── presenters/     Presenter
    ├── repositories/   Repository
    └── services/       Service
└── widgets/            Yii2 Widget
```

